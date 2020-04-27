<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Cnation]].
 *
 * @see Cnation
 */
class CnationQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Cnation[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Cnation|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
