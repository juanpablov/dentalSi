<div class="table-responsive" >
    <table id="table" class="table table-vcenter table-hover table-bordered table-striped table-condensed">
		<thead align="center" >
		    <tr> 
		        <th>Columna</th>
		        <th>Verifica revisión</th>
		        <th>Verifica corrección</th>
		        <th>-</th>
		    </tr>
		</thead>
		<tbody>
			{foreach from=$fuenteColumnas item=unaFuenteColumna}			
			<tr>
				<td>{$unaFuenteColumna->getNombreDeColumna()}</td>
				<td>{if $unaFuenteColumna->realizaRevision()}Sí {else} No {/if}</td>
				<td>{if $unaFuenteColumna->realizaCorreccion()}Sí {else} No {/if}</td>
				<td>Editar</td>
			</tr>
			{/foreach}	    
		</tbody>
    </table>
</div>