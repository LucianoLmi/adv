<div class="jumbotron" ng-controller="mostrarCtrl">
		
		<table class="table">
			<tr>
				<th></th>
				<th>Celular</th>
				<th>Senha</th>
                                <th>Ativo</th>
                                <th>Data</th>
                                <th>Tipo</th>
				
			</tr>
			<tr  ng-repeat="usuario in usuarios">
				<td><input type="checkbox"/></td>
				<td>{{usuario.celular}}</td>
				<td>{{usuario.senha}}</td>
                                <td>{{usuario.ativo}}</td>
                                <td>{{usuario.datacad}}</td>
                                <td>{{usuario.tipo}}</td>
				
			</tr>
		</table>
		<hr/>
</div>