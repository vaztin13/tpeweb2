<?php
/* Smarty version 4.2.1, created on 2022-10-16 06:07:14
  from 'C:\xampp\htdocs\alfontp\templates\form.edit.cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b8372c5dc83_60265778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3683e454caa6673ce39c8a319016438b1e3091c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\alfontp\\templates\\form.edit.cat.tpl',
      1 => 1665777523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634b8372c5dc83_60265778 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <form method='POST' action="editarcat">
        <input class="form-control" placeholder="editar categoria" name="tipo">
        <button class="btn btn-outline-secondary" type="submit">editar</button>
    </form>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
