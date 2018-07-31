<div class="table-responsive" >
    <table id="table" class="table table-vcenter table-hover table-bordered table-striped table-condensed">
		<thead align="center" >
		    <tr> 
		        <th>Estado inicial</th>
		        <th>Pasa a</th>
		        <th>-</th>
		    </tr>
		</thead>
		<tbody>
			{foreach from=$fuente->getConversiones() item=unaConversion}			
			<tr>
				<td>{$unaConversion->getEstadoOriginal()->getNombre()}</td>
				<td>{$unaConversion->getEstadoFinal()->getNombre()}</td>
				<td>
					<button class="btn btn-primary" onclick="modalEliminarConversion('{$unaConversion->getId()}');">Eliminar</button>
				</td>
			</tr>
			{/foreach}	    
		</tbody>
    </table>
</div>