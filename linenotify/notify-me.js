const Knex = require('knex');
const request = require('request');
const getdata = require('./getsqldata');
var moment = require('moment');
var cron = require('node-cron');
let nodemailer = require("nodemailer");


moment.locale('th');

const connection = {
    host: '127.0.0.1',
    port: +3333,
    database: 'jhcisdb',
    user: 'root',
    password: '123456',
    timezone: 'UTC',
    typeCast: function(field, next) {
        if (field.type == 'DATETIME') {
            return moment(field.string()).format('YYYY-MM-DD HH:mm:ss');
        }
        return next();
    }
}

var db = Knex({
    client: 'mysql',
    connection: connection,
    pool: {
        min: 0,
        max: 10,
        afterCreate: function(conn, done) {
            conn.query('SET NAMES utf8;', function(err) {
                if (err) {
                    done(err, conn);
                    console.log('Connection ERROR');
                } else {
                    conn.query('SET NAMES utf8;', function(err) {
                        done(err, conn);
                        console.log('Connection Success');
                    });
                }
            });

        }
    },
    acquireConnectionTimeout: 5000
});



/*
// create mail transporter
let transporter = nodemailer.createTransport({
    service: "hotmail",
    auth: {
        user: "kukks205@hotmail.com",
        pass: "Password"
    }
});

// sending emails at periodic intervals
cron.schedule("50 16 * * *", function() {
    console.log("---------------------");
    console.log("Running Cron Job");
    let mailOptions = {
        from: "kukks205@hotmail.com",
        to: "kukks205@gmail.com",
        subject: `Test Send E-mail Auto ;)`,
        text: `Hi there, this email was automatically sent by us`
    };
    transporter.sendMail(mailOptions, function(error, info) {
        if (error) {
            throw error;
        } else {
            console.log("Email successfully sent!");
        }
    });
});


*/

async function getMessage() {

    let message;
    let year = moment().format("YYYY");
    let thai_year = parseInt(year) + 543;
    let cur_day = moment().format("D MMMM ") + thai_year;
    let row1;
    let row2;
    let row3;
    let row4;


    console.log(cur_day);


    let sql_row1 = `select concat("ผู้รับบริการทั้งหมด จำนวน ",count(vn)," ราย") as "cc" from vn_stat where vstdate=CURDATE()`;

    await getdata.GetSQLStringData(db, sql_row1).then((data) => {
        this.row1 = data;
        row1 = this.row1;
    }).catch((err) => {
        this.message = '00000';
        console.log("error");
    });

    let sql_row2 = `select concat("ผู้รับบริการทำแผล จำนวน ",count(v.vn)," ราย") as cc
    from doctor_operation as d
    join vn_stat as v on v.vn=d.vn
    where v.vstdate=CURDATE() and er_oper_code='160'`;

    await getdata.GetSQLStringData(db, sql_row2).then((data) => {
        this.row2 = data;
        row2 = this.row2;
    }).catch((err) => {
        this.message = '00000';
        console.log("error");
    });

    let sql_row3 = `select GROUP_CONCAT(bb) as cc from (select concat('\r\n','-',d.name,"   จำนวน ",count(v.vn)," ราย") as bb
    from doctor_operation as o
    join vn_stat as v on v.vn=o.vn
    join doctor as d on d.code = o.doctor
    where v.vstdate=CURDATE() and er_oper_code='160'
    group by o.doctor
    order by count(v.vn) desc) as cc`;

    await getdata.GetSQLStringData(db, sql_row3).then((data) => {
        this.row3 = data;
        row3 = this.row3;
    }).catch((err) => {
        this.message = '00000';
        console.log("error");
    });


    message = 'สรุปผู้ป่วย \r\nวันที่ ' + cur_day + '\r\n' + "เวลา " + moment().format("HH:mm:ss") + '\r\n' + row1 + '\r\n' + row2 + '\r\n' + "แยกตามผู้ให้บริการดังนี้ " + row3;

    request({
        method: 'POST',
        uri: 'https://notify-api.line.me/api/notify',
        header: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        auth: {
            bearer: 'Your Token', //token
        },
        form: {
            message: message, //ข้อความที่จะส่ง
        },
    }, (err, httpResponse, body) => {
        if (err) {
            console.log(err)
        } else {
            console.log(body)
        }
    });
}


async function getAppoint() {

    let message;
    let year = moment().format("YYYY");
    let thai_year = parseInt(year) + 543;
    let cur_day = moment().add(1, 'day').format("D MMMM ") + thai_year;
    let row1;
    let row2;
    let row3;
    let row4;


    console.log(cur_day);


    let sql_row1 = `select GROUP_CONCAT(messages) as cc from (select
        concat(c.name,' จำนวน  ',count(o.vn),'  ราย','\r\n') as 'messages'
        from oapp as o
        join clinic as c on c.clinic=o.clinic
        where nextdate=DATE_ADD(CURDATE(),INTERVAL 1 DAY)
        group by o.clinic) as d`;

    await getdata.GetSQLStringData(db, sql_row1).then((data) => {
        this.row1 = data;
        row1 = this.row1;
    }).catch((err) => {
        this.message = '00000';
        console.log("error");
    });



    message = 'จำนวนผู้นัดมารับบริการ\r\nพรุ่งนี้ วันที่ ' + cur_day + '\r\n' + row1;

    request({
        method: 'POST',
        uri: 'https://notify-api.line.me/api/notify',
        header: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        auth: {
            bearer: 'Your Token', //token
        },
        form: {
            message: message, //ข้อความที่จะส่ง
        },
    }, (err, httpResponse, body) => {
        if (err) {
            console.log(err)
        } else {
            console.log(body)
        }
    });
}


async function getAppointDetail() {

    let message;
    let year = moment().format("YYYY");
    let thai_year = parseInt(year) + 543;
    let cur_day = moment().format("D MMMM ") + thai_year;
    let row1;
    let row2;
    let row3;
    let row4;


    console.log(cur_day);


    let sql_row1 = `select group_concat(c.name,"\r\n",REPLACE(d.cc,",",""),"\r\n") as cc from
    (select
    group_concat(concat(" - ",p.pname,p.fname," ",p.lname)," [โทร : ",if(p.mobile_phone is null,' - ',p.mobile_phone),"]\r\n") as cc,o.clinic
    from oapp as o
    join clinic as c on c.clinic=o.clinic
    join person as p on p.patient_hn = o.hn
    where nextdate=CURDATE()
    and o.vstdate is not null
    group by o.clinic) d
    join clinic as c on c.clinic=d.clinic`;

    await getdata.GetSQLStringData(db, sql_row1).then((data) => {
        this.row1 = data;
        row1 = this.row1;
    }).catch((err) => {
        this.message = '00000';
        console.log("error");
    });

    let text = await row1.replace(",", "");
    let text2 = await text.replace(" , ", "");

    message = 'รายชื่อผู้นัดมารับบริการ\r\nวันนี้ วันที่ ' + cur_day + '\r\n' + '\r\n' + text2;

    request({
        method: 'POST',
        uri: 'https://notify-api.line.me/api/notify',
        header: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        auth: {
            bearer: 'Your Token', //token
        },
        form: {
            message: message, //ข้อความที่จะส่ง
        },
    }, (err, httpResponse, body) => {
        if (err) {
            console.log(err)
        } else {
            console.log(body)
        }
    });
}


cron.schedule('36 08 * * *', () => {

    //console.log('Runing a job at 12:00 at Asia/Bangkok');
    getAppointDetail();

}, {
    scheduled: true,
    timezone: "Asia/Bangkok"
});


cron.schedule('00 12 * * *', () => {

    //console.log('Runing a job at 12:00 at Asia/Bangkok');
    getMessage();

}, {
    scheduled: true,
    timezone: "Asia/Bangkok"
});

cron.schedule('35 18 * * *', () => {

    //console.log('Runing a job at 12:00 at Asia/Bangkok');
    getMessage();

}, {
    scheduled: true,
    timezone: "Asia/Bangkok"
});


cron.schedule('30 15 * * *', () => {
    //console.log('Runing a job at 15:00 at Asia/Bangkok');
    getAppoint();
}, {
    scheduled: true,
    timezone: "Asia/Bangkok"
});
