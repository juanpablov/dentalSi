<div class="table-responsive" >
    <table id="table" class="table table-vcenter table-hover table-bordered table-striped table-condensed">
		<thead align="center" >
		    <tr> 
		        <th>Orden</th>
		        <th>Accion</th>
		        <th>Parametros</th>
		        <th>¿Está activa?</th>
		        <th>-</th>
		    </tr>
		</thead>
		<tbody>
			{foreach from=$acciones item=unaAccion}
			<tr>
				<td>{$unaAccion->getOrdenDeEjecucion()}</td>
				<td>{$unaAccion->getAccion()->getNombre()}</td>
				<td>{$unaAccion->getParametros()}</td>
				<td>{if $unaAccion->estaActiva()}Sí {else}No {/if}</td>
				<td>
					{if $unaAccion->estaActiva()}
					 	<button class="btn btn-danger" style="width: 100px;" 
                                    id="btn{$unaAccion->getId()}" 
                                    onclick="desactivar('{$unaAccion->getId()}')">
                                    Desactivar
                    	</button> 
					 {else}
					 	<button class="btn btn-primary" style="width: 100px;" 
                                    id="btn{$unaAccion->getId()}" 
                                    onclick="activar('{$unaAccion->getId()}')">
                                    Activar
                    	</button> 
					 {/if}
					 <button class="btn btn-primary" style="width: 100px;" 
                                    id="btn{$unaAccion->getId()}" 
                                    onclick="editar('{$unaAccion->getId()}')">
                                    Editar
                    </button> 
				</td>
			</tr>
			{/foreach}	    
		</tbody>
    </table>
</div>