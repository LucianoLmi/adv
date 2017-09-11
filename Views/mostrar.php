<div class="jumbotron" ng-controller="mostrarCtrl">
		
		<table class="table">
			<tr>
				<th></th>
				<th>Nome</th>
				<th>Celular</th>				
				
			</tr>
			<tr  ng-repeat="usuario in usuarios">
				<td><input type="checkbox"/></td>
				<td>{{usuario.nome}}</td>
				<td>{{usuario.celular}}</td>				
				
			</tr>
		</table>
		<hr/>
</div>