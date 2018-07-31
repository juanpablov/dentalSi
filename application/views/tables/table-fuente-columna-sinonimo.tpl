<button class="btn btn-primary" onclick="modalAgregarPorFuente()">Agregar</button><br><br>
<div class="table-responsive" >
    <table id="table" class="table table-vcenter table-hover table-bordered table-striped table-condensed">
		<thead align="center" >
		    <tr> 
		        <th>Columna</th>
		        <th>Palabra</th>
		        <th>Sinonimo</th>
		        <th>-</th>
		    </tr>
		</thead>
		<tbody>
			{foreach from=$fuente->getFuenteColumnas() item=unaFuenteColumna}			
				{foreach from=$unaFuenteColumna->getSinonimos() item=unSinonimoPalabra}
				<tr>
					<td>{$unaFuenteColumna->getNombreDeColumna()}</td>
					<td>{$unSinonimoPalabra->getPalabra()}</td>
					<td>{$unSinonimoPalabra->getPalabraDelSinonimo()}</td>
					<td>
						<button class="btn btn-primary" onclick="modalEditarPorFuente('{$unSinonimoPalabra->getId()}');">Editar
						</button>
						<button class="btn btn-danger" onclick="intentarEliminarPorFuente('{$unSinonimoPalabra->getId()}');">Eliminar
						</button>
					</td>
				</tr>
				{/foreach}
			{/foreach}	    
		</tbody>
    </table>
</div>