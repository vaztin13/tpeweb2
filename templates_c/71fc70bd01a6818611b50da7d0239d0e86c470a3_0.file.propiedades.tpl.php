<?php
/* Smarty version 4.2.1, created on 2022-09-30 23:02:37
  from '/Applications/XAMPP/xamppfiles/htdocs/web2/tpe/templates/propiedades.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6337596dee4b71_17802148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71fc70bd01a6818611b50da7d0239d0e86c470a3' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/web2/tpe/templates/propiedades.tpl',
      1 => 1664571750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6337596dee4b71_17802148 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <form method='POST' id='filtro'>
    <input placeholder='buscar por categoria'>
 </form>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['properties']->value, 'propertie');
$_smarty_tpl->tpl_vars['propertie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['propertie']->value) {
$_smarty_tpl->tpl_vars['propertie']->do_else = false;
?>
           <tbody class="table-group-divider">
                    <tr>
                        <td> <?php echo $_smarty_tpl->tpl_vars['propertie']->value->direccion;?>
 </td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['propertie']->value->tipo;?>
 </td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['propertie']->value->habitaciones;?>
 </td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['propertie']->value->precio;?>
 </td>
                        <td> <?php echo $_smarty_tpl->tpl_vars['propertie']->value->alquiler_venta;?>
 </td>
                    </tr>
           </tbody>
    <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
      
 </table>
<?php }
}
