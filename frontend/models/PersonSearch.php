<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Person;

/**
 * PersonSearch represents the model behind the search form of `frontend\models\Person`.
 */
class PersonSearch extends Person
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fname', 'lname', 'birth', 'sex', 'idcard', 'bloodgroup', 'bloodrh', 'allergic', 'marystatus', 'educate', 'occupa', 'nation', 'origin', 'intercode', 'religion', 'familyposition', 'typelive', 'datein', 'dischargetype', 'dischargedate', 'father', 'fatherid', 'mother', 'motherid', 'mate', 'mateid', 'privatedoc', 'rightcode', 'rightno', 'hosmain', 'hossub', 'dateregis', 'datestart', 'dateexpire', 'officework', 'hnomoi', 'roadmoi', 'mumoi', 'subdistcodemoi', 'distcodemoi', 'provcodemoi', 'postcodemoi', 'telephoneperson', 'mobile', 'dateupdate', 'flag18fileexpo', 'messengername', 'messengeraddr', 'messengertel', 'patientrelate', 'persondisease', 'flagoffline', 'nickname', 'prenameeng', 'fnameeng', 'lnameeng', 'passpotnumber', 'workpermitnumber', 'hidmoi11', 'housetype', 'roomno', 'condo', 'soisub', 'soimain', 'dateupdateaddressout', 'candobedhomesocial', 'beastprojectout', 'healthcuation', 'fingerprintr1', 'fingerprintr2', 'userpccprivatedoc'], 'safe'],
            [['pid','hcodeoldin', 'mommilk', 'person_house_position_id_from_hosxp'], 'integer'],
            [['income'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Person::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'pid' => $this->pid,
            'hcode' => $this->hcode,
            'birth' => $this->birth,
            'familyno' => $this->familyno,
            'income' => $this->income,
            'datein' => $this->datein,
            'dischargedate' => $this->dischargedate,
            'dateregis' => $this->dateregis,
            'datestart' => $this->datestart,
            'dateexpire' => $this->dateexpire,
            'hcodeoldin' => $this->hcodeoldin,
            'dateupdate' => $this->dateupdate,
            'mommilk' => $this->mommilk,
            'person_house_position_id_from_hosxp' => $this->person_house_position_id_from_hosxp,
            'dateupdateaddressout' => $this->dateupdateaddressout,
        ]);

        $query->andFilterWhere(['like', 'pcucodeperson', $this->pcucodeperson])
            ->andFilterWhere(['like', 'prename', $this->prename])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'lname', $this->lname])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'idcard', $this->idcard])
            ->andFilterWhere(['like', 'bloodgroup', $this->bloodgroup])
            ->andFilterWhere(['like', 'bloodrh', $this->bloodrh])
            ->andFilterWhere(['like', 'allergic', $this->allergic])
            ->andFilterWhere(['like', 'marystatus', $this->marystatus])
            ->andFilterWhere(['like', 'educate', $this->educate])
            ->andFilterWhere(['like', 'occupa', $this->occupa])
            ->andFilterWhere(['like', 'nation', $this->nation])
            ->andFilterWhere(['like', 'origin', $this->origin])
            ->andFilterWhere(['like', 'intercode', $this->intercode])
            ->andFilterWhere(['like', 'religion', $this->religion])
            ->andFilterWhere(['like', 'familyposition', $this->familyposition])
            ->andFilterWhere(['like', 'typelive', $this->typelive])
            ->andFilterWhere(['like', 'dischargetype', $this->dischargetype])
            ->andFilterWhere(['like', 'father', $this->father])
            ->andFilterWhere(['like', 'fatherid', $this->fatherid])
            ->andFilterWhere(['like', 'mother', $this->mother])
            ->andFilterWhere(['like', 'motherid', $this->motherid])
            ->andFilterWhere(['like', 'mate', $this->mate])
            ->andFilterWhere(['like', 'mateid', $this->mateid])
            ->andFilterWhere(['like', 'privatedoc', $this->privatedoc])
            ->andFilterWhere(['like', 'rightcode', $this->rightcode])
            ->andFilterWhere(['like', 'rightno', $this->rightno])
            ->andFilterWhere(['like', 'hosmain', $this->hosmain])
            ->andFilterWhere(['like', 'hossub', $this->hossub])
            ->andFilterWhere(['like', 'officework', $this->officework])
            ->andFilterWhere(['like', 'hnomoi', $this->hnomoi])
            ->andFilterWhere(['like', 'roadmoi', $this->roadmoi])
            ->andFilterWhere(['like', 'mumoi', $this->mumoi])
            ->andFilterWhere(['like', 'subdistcodemoi', $this->subdistcodemoi])
            ->andFilterWhere(['like', 'distcodemoi', $this->distcodemoi])
            ->andFilterWhere(['like', 'provcodemoi', $this->provcodemoi])
            ->andFilterWhere(['like', 'postcodemoi', $this->postcodemoi])
            ->andFilterWhere(['like', 'telephoneperson', $this->telephoneperson])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'flag18fileexpo', $this->flag18fileexpo])
            ->andFilterWhere(['like', 'messengername', $this->messengername])
            ->andFilterWhere(['like', 'messengeraddr', $this->messengeraddr])
            ->andFilterWhere(['like', 'messengertel', $this->messengertel])
            ->andFilterWhere(['like', 'patientrelate', $this->patientrelate])
            ->andFilterWhere(['like', 'persondisease', $this->persondisease])
            ->andFilterWhere(['like', 'flagoffline', $this->flagoffline])
            ->andFilterWhere(['like', 'nickname', $this->nickname])
            ->andFilterWhere(['like', 'prenameeng', $this->prenameeng])
            ->andFilterWhere(['like', 'fnameeng', $this->fnameeng])
            ->andFilterWhere(['like', 'lnameeng', $this->lnameeng])
            ->andFilterWhere(['like', 'passpotnumber', $this->passpotnumber])
            ->andFilterWhere(['like', 'workpermitnumber', $this->workpermitnumber])
            ->andFilterWhere(['like', 'hidmoi11', $this->hidmoi11])
            ->andFilterWhere(['like', 'housetype', $this->housetype])
            ->andFilterWhere(['like', 'roomno', $this->roomno])
            ->andFilterWhere(['like', 'condo', $this->condo])
            ->andFilterWhere(['like', 'soisub', $this->soisub])
            ->andFilterWhere(['like', 'soimain', $this->soimain])
            ->andFilterWhere(['like', 'candobedhomesocial', $this->candobedhomesocial])
            ->andFilterWhere(['like', 'beastprojectout', $this->beastprojectout])
            ->andFilterWhere(['like', 'healthcuation', $this->healthcuation])
            ->andFilterWhere(['like', 'fingerprintr1', $this->fingerprintr1])
            ->andFilterWhere(['like', 'fingerprintr2', $this->fingerprintr2])
            ->andFilterWhere(['like', 'userpccprivatedoc', $this->userpccprivatedoc]);

        return $dataProvider;
    }
}
