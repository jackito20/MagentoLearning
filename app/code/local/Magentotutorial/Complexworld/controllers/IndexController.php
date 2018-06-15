<?php
class Magentotutorial_Complexworld_IndexController extends Mage_Core_Controller_Front_Action {

	public function indexAction() {
		$weblog2 = Mage::getModel('complexworld/eavblogpost');
		$weblog2->load(1);
		var_dump($weblog2);
	}

	public function populateEntriesAction() {
		for ($i=0;$i<10;$i++) {
			$weblog2 = Mage::getModel('complexworld/eavblogpost');
			$weblog2->setTitle('This is a test '.$i);
			$weblog2->setContent('This is test content '.$i);
			$weblog2->setDate(now());
			$weblog2->save();
		}
	
		echo 'Done';
	}
	
	public function showCollectionAction() {
		$weblog2 = Mage::getModel('complexworld/eavblogpost');
		$entries = $weblog2->getCollection()
			->addAttributeToSelect('title')
			->addAttributeToSelect('content');
		$entries->load();
		foreach($entries as $entry)
		{
			// var_dump($entry->getData());
			echo '<h2>' . $entry->getTitle() . '</h2>';
			echo '<p>Date: ' . $entry->getDate() . '</p>';
			echo '<p>' . $entry->getContent() . '</p>';
		}
		echo '</br>Done</br>';
	}

	public function someMethodAction() {

		$thing_1 = new Varien_Object();
		$thing_1->setName('Richard');
		$thing_1->setAge(24);

		$thing_2 = new Varien_Object();
		$thing_2->setName('Jane');
		$thing_2->setAge(12);

		$thing_3 = new Varien_Object();
		$thing_3->setName('Spot');
		$thing_3->setLastName('The Dog');
		$thing_3->setAge(7);

		var_dump($thing_1->getName());

		var_dump($thing_3->getData());

		$thing_1->setLastName('Smith');

		$collection_of_things = new Varien_Data_Collection();
		$collection_of_things
			->addItem($thing_1)
			->addItem($thing_2)
			->addItem($thing_3);

		foreach($collection_of_things as $thing)
			{
				var_dump($thing->getData());
			}
		
			var_dump($collection_of_things->getFirstItem()->getData());
			var_dump($collection_of_things->getLastItem()->getData());
			var_dump ($collection_of_things-> toXml ()); 

			var_dump($collection_of_things->getColumnValues('name'));

			var_dump($collection_of_things->getItemsByColumnValue('name','Spot'));
	}

	public function testAction()
	{
		$collection_of_products = Mage::getModel('catalog/product')->getCollection();
		var_dump($collection_of_products->getFirstItem()->getData());

		/*$collection_of_products = Mage::getModel('catalog/product')->getCollection();
		var_dump($collection_of_products->getSelect()); //might cause a segmentation fault
		*/
		
		$collection_of_products = Mage::getModel('catalog/product')->getCollection();
		//var_dump($collection_of_products->getSelect()); //might cause a segmentation fault
		var_dump(
			(string) $collection_of_products->getSelect()
		);

		$collection_of_products = Mage::getModel('catalog/product')
		->getCollection()
		->addAttributeToSelect('*');  //the asterisk is like a SQL SELECT * FROM ...
		var_dump(
			(string) $collection_of_products->getSelect()
		);

		$collection_of_products = Mage::getModel('catalog/product')
			->getCollection();
		$collection_of_products->addFieldToFilter('sku','n2610');

		//another neat thing about collections is you can pass them into the count      //function.  More PHP5 powered goodness
		echo "Our collection now has " . count($collection_of_products) . ' item(s)';
		var_dump($collection_of_products->getFirstItem()->getData());

		var_dump(
			(string)
			Mage::getModel('catalog/product')
			->getCollection()
			->addFieldToFilter('sku','n2610')
			->getSelect());

		var_dump(
			(string)
			Mage::getModel('catalog/product')
			->getCollection()
			->addAttributeToSelect('*')
			->addFieldToFilter('meta_title','my title')
			->getSelect()
		);

		var_dump(
			(string)
			Mage::getModel('catalog/product')
				->getCollection()
				->addFieldToFilter('sku', array('eq'=>'n2610'))
				->getSelect()
		);
	}
}