<?php 

class Ecwid_Importer_Task_Import_Woo_Products extends Ecwid_Importer_Task {

	public static $type = 'import-woo-products';

	const BATCH_SIZE = 50;

	public function execute( Ecwid_Importer $importer, array $data ) {


		$products = new WP_Query( array( 
			'post_type' => self::WC_POST_TYPE_PRODUCT 
		) );
	
		$count = $products->post_count;
		
		$ind = 0;
		
		while ( $ind * self::BATCH_SIZE < $count ) {
			$importer->append_after_current(
				Ecwid_Importer_Task_Import_Woo_Products_Batch::build( 
					array(
						'start' => $ind * self::BATCH_SIZE,
						'length' => self::BATCH_SIZE 
					)
				)
			);
			$ind++;
		}
	}
}