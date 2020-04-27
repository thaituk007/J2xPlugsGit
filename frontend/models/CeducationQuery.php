<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Ceducation]].
 *
 * @see Ceducation
 */
class CeducationQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Ceducation[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Ceducation|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
