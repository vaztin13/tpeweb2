{include file="header.tpl"}

<div>
    {if isset($smarty.session.USER_EMAIL)}
        <div>
            <form method='POST' action="agregarcat">
                <input class="form-control" placeholder="agregar categoria" name="tipo">
                <button class="btn btn-outline-secondary" type="submit" href="agregarcat">Agregar</button>
            </form>
        </div>
    {/if}
    <p class="fw-bold"> Listado de Categorias: </p>
    <table class="table">
        {foreach from=$tipos item=$tipo}
            <tr>
                <td>{$tipo->id_tipo}</td>
                <td value="{$tipo->id_tipo}">{$tipo->tipo}</td>
                <td> <a class="btn btn-outline-secondary" type="button" href="filtrar/{$tipo->id_tipo}">Ver por categoria
                </td>
                {if isset($smarty.session.USER_EMAIL)}
                    <td> <a class="btn btn-outline-secondary" type="button" href="formeditarcat/{$tipo->id_tipo}">EDITAR </td>
                    <td> <a class="btn btn-outline-danger" type="button" href="borrarcat/{$tipo->id_tipo}"> BORRAR </a>
                    {/if}
            </tr>
        {{/foreach}}
    </table>
</div>
{*
<div>
    <p class="fw-bold">Filtrar por:</p>
        <select class="form-select" name="type_option">
            <option selected>ver todas</option>
            {foreach from=$tipos item=tipo}
                <option><a name="tipo" value="tipo" href="filtrar">{$tipo->tipo}</option>
            {/foreach}    
        </select>
</div>
*}
<div>
    {if isset($smarty.session.USER_EMAIL)}
    <h3>{if isset($index)}Modificar {$properties[$index -1]->direccion}{else}Agregar propiedad{/if}</h3>
        <form method='POST' action="agregar">
            <input type="hidden" name="id_propiedad" value="{if isset($index)}{$properties[$index -1]->id_propiedad}{/if}">
            <input class="form-control" placeholder=direccion name="direccion" value="{if isset($index)}{$properties[$index -1]->direccion}{/if}" required>
            <select class="form-select" name="tipo" placeholder="tipo">
                <option selected>tipo</option>
                {foreach from=$tipos item=tipo}
                    <option value="{$tipo->id_tipo}" 
                    {if isset($index) && $properties[$index -1]->tipo == $tipo->id_tipo}
                        selected
                    {/if}>
                    {$tipo->tipo}</option>
                {/foreach}
            </select>
            <input class="form-control" placeholder=habitaciones type="number" name="habitaciones" value="{if isset($index)}{$properties[$index -1]->habitaciones}{/if}" required>
            <input class="form-control" placeholder=precio type="number" name="precio" value="{if isset($index)}{$properties[$index -1]->precio}{/if}" required>
            <select class="form-select" name="alquiler_venta" placeholder="alquiler/venta" value="{if isset($index)}{$properties[$index -1]->alquiler_venta}{/if}" required>
                <option selected>alquiler/venta</option>
                <option>alquiler</option>
                <option>venta</option>
            </select>
        <input type="submit" value="{if isset($index)}Modificar{else}Agregar{/if}" class="btn btn-success btn-sm">
        </form>
    {/if}
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
        {foreach from=$properties item=$property}
            <tbody class="table-group-divider">
                <tr>
                    <td><a href="detalle/{$property->id_propiedad}"> {$property->direccion} </td>
                    <td> {$property->tipo} </td>
                    <td> {$property->habitaciones} </td>
                    <td> {$property->precio} </td>
                    <td> {$property->alquiler_venta} </td>
                    {if isset($smarty.session.USER_EMAIL)}
                        <td> <a class="btn btn-outline-danger" type="button" href="borrar/{$property->id_propiedad}"> BORRAR
                            </a>
                        <td> <a class="btn btn-outline-secondary" type="button" href="formeditar/{counter}">EDITAR</td>
                    {/if}
                </tr>
            </tbody>
        {{/foreach}}
    </table>

</div>
{include file="templates/footer.tpl"}