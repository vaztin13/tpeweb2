<?php
/* Smarty version 4.2.1, created on 2022-10-16 22:32:32
  from 'C:\xampp\htdocs\alfontp\templates\detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c6a60806e86_79166736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9820d276a15b4e5ea7d8d5a18aebf3c790b848a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\alfontp\\templates\\detail.tpl',
      1 => 1665777523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634c6a60806e86_79166736 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Direccion: <?php echo $_smarty_tpl->tpl_vars['property']->value->direccion;?>
</h1>
<h2>Tipo: <?php echo $_smarty_tpl->tpl_vars['property']->value->tipo;?>
</h2>
<h2>Habitaciones: <?php echo $_smarty_tpl->tpl_vars['property']->value->habitaciones;?>
</h2>
<h2>Precio: <?php echo $_smarty_tpl->tpl_vars['property']->value->precio;?>
</h2>
<h2>Alquiler/Venta: <?php echo $_smarty_tpl->tpl_vars['property']->value->alquiler_venta;?>
</h2>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
