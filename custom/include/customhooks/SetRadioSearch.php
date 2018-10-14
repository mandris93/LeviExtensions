<?php

if (!defined('sugarEntry') || !sugarEntry)
{
    die('Not A Valid Entry Point');
}
class SetRadioSearch
{
    public function after_relationship_add($bean, $event, $arguments)
    {
        if(($arguments[$arguments['module'] = 'Contacts' && 'related_module'] = 'AOS_Contracts') || ($arguments['module'] = 'AOS_Contracts' && $arguments['related_module'] = 'Contacts'))
        {
            $this->setSearchFields($arguments['id'], $arguments['related_id'], 1);
        }
    }

    public function after_relationship_delete($bean, $event, $arguments)
    {
        if(($arguments[$arguments['module'] = 'Contacts' && 'related_module'] = 'AOS_Contracts') || ($arguments['module'] = 'AOS_Contracts' && $arguments['related_module'] = 'Contacts'))
        {
            $this->setSearchFields($arguments['id'], $arguments['related_id'], 0);
        }
    }


    private function setSearchFields($contactId, $contractId, $value)
    {
        $contract = BeanFactory::getBean('AOS_Contracts', $contractId);
        if($contract->termek_alkat_c){
            $category = $contract->termek_alkat_c;

            $customer = BeanFactory::getBean('Contacts', $contactId);
            $customer->{$category} = $value;
            $customer->save();
        }
    }
}