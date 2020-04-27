<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Creligion]].
 *
 * @see Creligion
 */
class CreligionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Creligion[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Creligion|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
