 
<a href="?move=add"> 新增</a>
<table cellpadding="1" cellspacing="1" border="1">
	<thead>
    	<tr>
        	<td>姓名</td>
            <td>Email</td>
     		<td>性別</td>
            <td>留言內容</td>
            <td>留言時間</td>
            <td>留言IP</td>
        </tr>
     </thead>
<?
		if($data['record']>0){
			foreach($data['data'] as $key => $value){
					//echo 'table'
?>
		<tbody>
        	<tr>
            	<td><?=$value['name']?></td>
                <td><?=$value['email']?></td>
                <td>
                <?
					if($value['sex']==0){
						echo '女生';
					}else{
						echo '男生';
					}
					?></td>
					<td><?=$value['content']?></td>
					<td><?=date('Y-m-d H:i:s',$value['create_time'])?></td>
                    <td><?=$value['ip']?></td>
                    
                 </tr>
          </tbody>
<?
			}
		}
?>
</table>