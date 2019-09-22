<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
 
  <title>Download files</title>
</head>
<body>

<table>
<thead>
    
    <th>Email</th>
    <th>File Name</th>
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
    	<td><?php echo $file['email']; ?></td>
      <td><?php echo $file['pdf_file']; ?></td>
      <td><a href="downloads.php?file_id=<?php echo $file['pdf_file'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>
<p>* Note: Report will last for one week only*</p>
</tbody>
</table>

</body>
</html>