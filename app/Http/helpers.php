<?php

function delete_form($routeParams, $label = 'Borrar')
{

  $form = Form::open(['method' => 'DELETE', 'route' => $routeParams]);

  $form .= Form::submit($label, ['class' => 'btn btn-danger']);

  return $form .= Form::close();
}
