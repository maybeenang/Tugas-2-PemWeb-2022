<?php
  $data = file_get_contents('./data.json');
  $data = json_decode($data, true);
  $data = $data['produk'];