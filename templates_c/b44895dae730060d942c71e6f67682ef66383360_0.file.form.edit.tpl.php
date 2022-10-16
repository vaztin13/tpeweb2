<?php
/* Smarty version 4.2.1, created on 2022-10-16 08:57:49
  from 'C:\xampp\htdocs\alfontp\templates\form.edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634bab6deb3765_89868421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b44895dae730060d942c71e6f67682ef66383360' => 
    array (
      0 => 'C:\\xampp\\htdocs\\alfontp\\templates\\form.edit.tpl',
      1 => 1665903468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634bab6deb3765_89868421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form method='POST' action="editar">
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['property']->value->id_propiedad;?>
">
    <?php echo var_dump($_smarty_tpl->tpl_vars['property']->value);?>

    <input class="form-control" placeholder=direccion name="direccion">
    <select class="form-select" name="tipo" placeholder="tipo">
        <option selected>tipo</option>
        <option value="3" name="tipo">casa</option>
        <option value="4" name="tipo">departamento</option>
        <option value="5" name="tipo">lote</option>
        <option value="6" name="tipo">monoambiente</option>
    </select>
    <input class="form-control" placeholder=habitaciones type="number" name="habitaciones">
    <input class="form-control" placeholder=precio type="number" name="precio">
    <select class="form-select" name="alquiler_venta" placeholder="alquiler/venta">
        <option selected>alquiler/venta</option>
        <option value="alquiler" name="alquiler_venta">alquiler</option>
        <option value="venta" name="alquiler_venta">venta</option>
    </select>
    <button class="btn btn-outline-secondary" type="submit">editar</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
