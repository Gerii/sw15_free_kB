<?php
echo $this->Html->css('bootstrap/css/bootstrap.min.css', null, array('inline' => false));
echo $this->Html->css('DataTables-1.10.4/media/css/jquery.dataTables.css', null, array('inline' => false));
echo $this->Html->css('yadcf-0.8.6/jquery.dataTables.yadcf.css', null, array('inline' => false));
echo $this->Html->css('DataTables-1.10.4/extensions/Responsive/css/dataTables.responsive.css', null, array('inline' => false));
echo $this->Html->css('jquery-ui-1.11.2/jquery-ui.css', null, array('inline' => false));
echo $this->Html->css('leaflet/leaflet.css', null, array('inline' => false));
echo $this->Html->css('linesFind.css', null, array('inline' => false));

echo $this->html->script('jquery-2.1.3.js');
echo $this->html->script('bootstrap/js/bootstrap.min.js');
echo $this->html->script('DataTables-1.10.4/media/js/jquery.dataTables.min.js');
echo $this->html->script('yadcf-0.8.6/jquery.dataTables.yadcf.js');
echo $this->html->script('bootstrap/js/bootstrap.min.js');
echo $this->html->script('jquery.dataTables.editable.js');
echo $this->html->script('jquery.jeditable.js');
echo $this->html->script('jquery.validate.js');
echo $this->html->script('DataTables-1.10.4/extensions/Responsive/js/dataTables.responsive.min.js');
echo $this->html->script('jquery-ui-1.11.2/jquery-ui.js');
echo $this->html->script('leaflet/leaflet.js');
echo $this->html->script('mapping.js');
echo $this->html->script('linesFind.js');

?>

<div class="lines index">
<ul>
<?php
/*$name = "leer";
echo $this->Form->input('link', array('label' => false, "class" => " form-control input-medium", "placeholder" => __('search for name'), 'id' => 'name'));
echo $this->Form->input('', array(
    'options' => array('under', 'above'),
    'empty' => '(choose one)',
	'id' => 'gllon'
));
echo $this->Form->input('link', array('label' => false, "class" => " form-control input-medium", "placeholder" => __('above/under Longitude'), 'id' => 'long'));
echo $this->Form->input('', array(
    'options' => array('under', 'above'),
    'empty' => '(choose one)',
	'id' => 'gllat'
));
echo $this->Form->input('link', array('label' => false, "class" => " form-control input-medium", "placeholder" => __('above/under Latitude'), 'id' => 'lat'));
echo $this->Form->button('Suchen', array('class' => 'btn btn-primary icon-search icon-white' ,'onclick' => "location.href='/map/stops/name/glon'+document.getElementById('gllon').value+'/lon'+document.getElementById('long').value+'/glat'+document.getElementById('gllat').value+'/lat'+document.getElementById('lat').value+'/name'+document.getElementById('name').value;"));
*/
?>
</ul>
<br />
<ul>
<?php
echo $this->Form->input('link', array('label' => false, "class" => " form-control stationInput input-medium", "placeholder" => __('Enter start station'), 'id' => 'name1'));
echo $this->Form->input('link', array('label' => false, "class" => " form-control stationInput input-medium", "placeholder" => __('Enter destination station'), 'id' => 'name2'));
echo $this->Form->button('Suchen', array('class' => 'btn btn-primary icon-search icon-white' ,'onclick' => "location.href='/map/lines/find/'+document.getElementById('name1').value+'/'+document.getElementById('name2').value;"));
?>
</ul>

      <div class="page-header">
	<h2><?php echo __('Lines'); ?></h2>
      </div>
	<table id="linesTable">
	<thead>
	<tr>
			<th><?php echo ('id'); ?></th>
			<th><?php echo ('name'); ?></th>
			<th><?php echo ('type'); ?></th>
			<th><?php echo ('number'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($lines as $line): ?>
	<tr id="<?php echo h($line['Line']['id']); ?>">
		<td class='read_only'><?php echo h($line['Line']['id']); ?></td>
		<td><?php echo $line['Line']['name']; ?></td>
		<td class='read_only'><?php echo h($line['Line']['type']); ?></td>
		<td><?php echo h($line['Line']['number']); ?></td>
	</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
	
	<h2>Corresponding <?php echo __('Stops');
	?></h2>
	<table id="stopstable">
	<thead>
	<tr>
			<th<?php echo ('id'); ?></th>
			<th><?php echo ('name'); ?></th>
			<th><?php echo ('lon'); ?></th>
			<th><?php echo ('lat'); ?></th>
			<th><?php echo ('type'); ?></th>
	</tr>
	</thead>
	<tbody>
	</tbody>
	</table>
	
	<div id='linesMap'></div>
	</div>
</div>
