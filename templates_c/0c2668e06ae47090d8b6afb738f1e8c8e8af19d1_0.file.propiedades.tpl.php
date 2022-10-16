<?php
/* Smarty version 4.2.1, created on 2022-10-17 00:45:50
  from 'C:\xampp\htdocs\alfontp\templates\propiedades.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c899ec03c76_39546220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c2668e06ae47090d8b6afb738f1e8c8e8af19d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\alfontp\\templates\\propiedades.tpl',
      1 => 1665960347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634c899ec03c76_39546220 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\alfontp\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
    <?php if ((isset($_SESSION['USER_EMAIL']))) {?>
        <div>
            <form method='POST' action="agregarcat">
                <input class="form-control" placeholder="agregar categoria" name="tipo">
                <button class="btn btn-outline-secondary" type="submit" href="agregarcat">Agregar</button>
            </form>
        </div>
    <?php }?>
    <p class="fw-bold"> Listado de Categorias: </p>
    <table class="table">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipos']->value, 'tipo');
$_smarty_tpl->tpl_vars['tipo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tipo']->value) {
$_smarty_tpl->tpl_vars['tipo']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['tipo']->value->id_tipo;?>
</td>
                <td value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value->id_tipo;?>
"><?php echo $_smarty_tpl->tpl_vars['tipo']->value->tipo;?>
</td>
                <td> <a class="btn btn-outline-secondary" type="button" href="filtrar/<?php echo $_smarty_tpl->tpl_vars['tipo']->value->id_tipo;?>
">Ver por categoria
                </td>
                <?php if ((isset($_SESSION['USER_EMAIL']))) {?>
                    <td> <a class="btn btn-outline-secondary" type="button" href="formeditarcat/<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
">EDITAR </td>
                    <td> <a class="btn btn-outline-danger" type="button" href="borrarcat/<?php echo $_smarty_tpl->tpl_vars['tipo']->value->id_tipo;?>
"> BORRAR </a>
                    <?php }?>
            </tr>
        <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

    </table>
</div>
<div>
    <?php if ((isset($_SESSION['USER_EMAIL']))) {?>
    <h3><?php if ((isset($_smarty_tpl->tpl_vars['index']->value))) {?>Modificar <?php echo $_smarty_tpl->tpl_vars['properties']->value[$_smarty_tpl->tpl_vars['index']->value-1]->direccion;
} else { ?>Agregar propiedad<?php }?></h3>
        <form method='POST' action="agregar">
            <input type="hidden" name="id_propiedad" value="<?php if ((isset($_smarty_tpl->tpl_vars['index']->value))) {
echo $_smarty_tpl->tpl_vars['properties']->value[$_smarty_tpl->tpl_vars['index']->value-1]->id_propiedad;
}?>">
            <input class="form-control" placeholder=direccion name="direccion" value="<?php if ((isset($_smarty_tpl->tpl_vars['index']->value))) {
echo $_smarty_tpl->tpl_vars['properties']->value[$_smarty_tpl->tpl_vars['index']->value-1]->direccion;
}?>" required>
            <select class="form-select" name="tipo" placeholder="tipo">
                <option selected>tipo</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipos']->value, 'tipo');
$_smarty_tpl->tpl_vars['tipo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tipo']->value) {
$_smarty_tpl->tpl_vars['tipo']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['tipo']->value->id_tipo;?>
" 
                    <?php if ((isset($_smarty_tpl->tpl_vars['index']->value)) && $_smarty_tpl->tpl_vars['properties']->value[$_smarty_tpl->tpl_vars['index']->value-1]->tipo == $_smarty_tpl->tpl_vars['tipo']->value->id_tipo) {?>
                        selected
                    <?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['tipo']->value->tipo;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <input class="form-control" placeholder=habitaciones type="number" name="habitaciones" value="<?php if ((isset($_smarty_tpl->tpl_vars['index']->value))) {
echo $_smarty_tpl->tpl_vars['properties']->value[$_smarty_tpl->tpl_vars['index']->value-1]->habitaciones;
}?>" required>
            <input class="form-control" placeholder=precio type="number" name="precio" value="<?php if ((isset($_smarty_tpl->tpl_vars['index']->value))) {
echo $_smarty_tpl->tpl_vars['properties']->value[$_smarty_tpl->tpl_vars['index']->value-1]->precio;
}?>" required>
            <select class="form-select" name="alquiler_venta" placeholder="alquiler/venta" value="<?php if ((isset($_smarty_tpl->tpl_vars['index']->value))) {
echo $_smarty_tpl->tpl_vars['properties']->value[$_smarty_tpl->tpl_vars['index']->value-1]->alquiler_venta;
}?>" required>
                <option selected>alquiler/venta</option>
                <option>alquiler</option>
                <option>venta</option>
            </select>
        <input type="submit" value="<?php if ((isset($_smarty_tpl->tpl_vars['index']->value))) {?>Modificar<?php } else { ?>Agregar<?php }?>" class="btn btn-success btn-sm">
        </form>
    <?php }?>
</div>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Direccion</th>
                <th>Categoria</th>
                <th>Habitaciones</th>
                <th>Precio</th>
                <th>Alquiler/Venta</th>
            </tr>
        </thead>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['properties']->value, 'property');
$_smarty_tpl->tpl_vars['property']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['property']->value) {
$_smarty_tpl->tpl_vars['property']->do_else = false;
?>
            <tbody class="table-group-divider">
                <tr>
                    <td><a href="detalle/<?php echo $_smarty_tpl->tpl_vars['property']->value->id_propiedad;?>
"> <?php echo $_smarty_tpl->tpl_vars['property']->value->direccion;?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['property']->value->tipo;?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['property']->value->habitaciones;?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['property']->value->precio;?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['property']->value->alquiler_venta;?>
 </td>
                    <?php if ((isset($_SESSION['USER_EMAIL']))) {?>
                        <td> <a class="btn btn-outline-danger" type="button" href="borrar/<?php echo $_smarty_tpl->tpl_vars['property']->value->id_propiedad;?>
"> BORRAR
                            </a>
                        <td> <a class="btn btn-outline-secondary" type="button" href="formeditar/<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
">EDITAR</td>
                    <?php }?>
                </tr>
            </tbody>
        <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

    </table>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
