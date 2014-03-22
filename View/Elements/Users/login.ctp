<?php
   echo $this->Form->create('User', array(
      'inputDefaults' => array(
	 'div' => 'form-group',
	 'wrapInput' => false,
	 'class' => 'form-control'
      ),
      'class' => 'well'
   )
   );
   echo $this->Html->tag('h2', __('Acceso'));
   echo $this->Form->input('username', array('label' => __('Usuario'), 'div' => 'form-group'));
   echo $this->Form->input('password', array('label' => __('Contraseña'), 'div' => 'form-group'));
   echo $this->Form->button(__('Submit'), array('class' => 'btn btn-primary btn-block', 'div' => 'form-group'));
   echo $this->Form->End();
   
?>