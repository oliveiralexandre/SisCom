
 @foreach ($users as $user)
    <tr>
      <td>select *, SUM(valor) as total_valor from moviment_produtos group by valor</td>
     
    </tr>

    @endforeach	

