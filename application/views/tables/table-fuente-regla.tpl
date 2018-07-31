<div class="table-responsive" >
    <table id="table" class="table table-vcenter table-hover table-bordered table-striped table-condensed">
		<thead align="center" >
		    <tr> 
		        <th>Regla</th>
		        <th>Columna</th>
		        <th>Parametros</th>
		        <th>¿Está activa?</th>
		        <th>-</th>
		    </tr>
		</thead>
		<tbody>
			{foreach from=$reglas item=unaRegla}
			<tr>
				<td>{$unaRegla->getRegla()->getNombre()}</td>
				<td>{$unaRegla->getColumna()->getNombre()}</td>
				<td>{$unaRegla->getParametros()}</td>
				<td>{if $unaRegla->estaActiva()}Sí {else}No {/if}</td>
				<td>
					 {if $unaRegla->estaActiva()}
					 	<button class="btn btn-danger" style="width: 100px;" 
                                    id="btn{$unaRegla->getId()}" 
                                    onclick="desactivar('{$unaRegla->getId()}')">
                                    Desactivar
                    	</button> 
					 {else}
					 	<button class="btn btn-primary" style="width: 100px;" 
                                    id="btn{$unaRegla->getId()}" 
                                    onclick="activar('{$unaRegla->getId()}')">
                                    Activar
                    	</button> 
					 {/if}
					 <button class="btn btn-primary" style="width: 100px;" 
                                    id="btn{$unaRegla->getId()}" 
                                    onclick="editar('{$unaRegla->getId()}')">
                                    Editar
                    </button> 
                </td>
			</tr>
			{/foreach}	    
		</tbody>
    </table>
</div>