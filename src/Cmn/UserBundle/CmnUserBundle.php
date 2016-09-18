<?php

namespace Cmn\UserBundle;

use Sonata\CoreBundle\Form\FormHelper;
use Cmn\UserBundle\DependencyInjection\Compiler\GlobalVariablesCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class CmnUserBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new GlobalVariablesCompilerPass());

        $this->registerFormMapping();
    }

    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        $this->registerFormMapping();
    }

    /**
     * Register form mapping information.
     */
    public function registerFormMapping()
    {
        FormHelper::registerFormTypeMapping(array(
            'fos_user_username' => 'FOS\UserBundle\Form\Type\UsernameFormType',
            'fos_user_profile' => 'FOS\UserBundle\Form\Type\ProfileFormType',
            'fos_user_registration' => 'FOS\UserBundle\Form\Type\RegistrationFormType',
            'fos_user_change_password' => 'FOS\UserBundle\Form\Type\ChangePasswordFormType',
            'fos_user_resetting' => 'FOS\UserBundle\Form\Type\ResettingFormType',
            'fos_user_group' => 'FOS\UserBundle\Form\Type\GroupFormType',
            'sonata_security_roles' => 'Cmn\UserBundle\Form\Type\SecurityRolesType',
            'sonata_user_profile' => 'Cmn\UserBundle\Form\Type\ProfileType',
            'sonata_user_gender' => 'Cmn\UserBundle\Form\Type\UserGenderListType',
            'sonata_user_registration' => 'Cmn\UserBundle\Form\Type\RegistrationFormType',
            'sonata_user_api_form_group' => 'Cmn\UserBundle\Form\Type\ApiGroupType',
            'sonata_user_api_form_user' => 'Cmn\UserBundle\Form\Type\ApiUserType',
        ));
    }
}
