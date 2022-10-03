 {include file="header.tpl"}
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
    {foreach from=$properties item=$propertie}
           <tbody class="table-group-divider">
                    <tr>
                        <td><a href="detalle/{$propertie->id}"> {$propertie->direccion} </td>
                        <td> {$propertie->tipo} </td>
                        <td> {$propertie->habitaciones} </td>
                        <td> {$propertie->precio} </td>
                        <td> {$propertie->alquiler_venta} </td>
                        <td> <button id="borrar">BORRAR </td>
                        <td> <button id="editar">EDITAR </td>
                    </tr>
           </tbody>
    {{/foreach}}      
 </table>
