<?php
/* Smarty version 4.2.1, created on 2022-10-03 22:51:58
  from '/Applications/XAMPP/xamppfiles/htdocs/web2/tpe/templates/detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633b4b6e329063_47682679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffd72abc8c241f50bf8b26ddb85352ca40136f86' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/web2/tpe/templates/detail.tpl',
      1 => 1664811059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_633b4b6e329063_47682679 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['properta']->value->direccion;?>
</h1>
<h2><?php echo $_smarty_tpl->tpl_vars['propertie']->value->tipo;?>
</h2>
<h2><?php echo $_smarty_tpl->tpl_vars['propertie']->value->habitaciones;?>
</h2>
<h2><?php echo $_smarty_tpl->tpl_vars['propertie']->value->precio;?>
</h2>
<h2><?php echo $_smarty_tpl->tpl_vars['propertie']->value->alquiler_venta;?>
</h2><?php }
}
