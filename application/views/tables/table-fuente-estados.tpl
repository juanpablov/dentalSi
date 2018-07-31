<div class="table-responsive" >
    <table id="table" class="table table-vcenter table-hover table-bordered table-striped table-condensed">
		<thead align="center" >
		    <tr> 
		        <th>Estado</th>
		        <th>Peso</th>
		        <th>¿Es final?</th>
		        <th>-</th>
		    </tr>
		</thead>
		<tbody>
			{foreach from=$estados item=unEstado}
			<tr>
				<td>{$unEstado->getEstado()->getNombre()}</td>
				<td>{$unEstado->getEstado()->getPeso()}</td>
				<td>{if $unEstado->getEstado()->esFinal()}Sí {else}No {/if}</td>
				<td>
					<button class="btn btn-primary" onclick="modalDesvincular('{$unEstado->getId()}');">Desvincular</button>
				</td>
			</tr>
			{/foreach}	    
		</tbody>
    </table>
</div>