<?php
/**
 * Contains definition of Person Controller class namely PersonController
 *
 * This file contains one class implementation
 * named PersonController class.
 *
 * @category Training/Learning PHP
 * @package Ready2Serve
 * @version v 1.0
 */
/**
 * Contains Person Controller class
 *
 * This Class gets a specific request from the Dispatcher class
 * and performs functions according to the request.
 *
 * @package Ready2Serve
 * @author Muhammad Raza <muhammad.raza@coeus-solutions.de>
 * @category Training/Learning PHP
 * @version v 1.0
 */
class PersonController
{
	/**
	 * @var string 'userName of user trying to login'
	 */
	private $userName;
	/**
	 * @var string 'password of user trying to login'
	 */
	private $password;
	/**
	 * @var view 'View class object'
	 */
	private $personModel;

	private $IOAdapterObject;
	/**
	 *
	 * Constructor of class
	 */
	public function __construct()
	{
		$this->view = new View();
		$this->personModel = new personModel();
		$this->IOAdapterObject = IOAdapter::getInstance();
	}
	/**
	 *
	 * Gets the person type using Person Model Class
	 *
	 * @access public
	 *
	 * @param string $personUserName 'UserName of person'
	 *
	 * @return string 'Person type'
	 */
	public function getPersonType($personUserName)
	{

	}
	/**
	 *
	 * sets the person Password using Product Model Class
	 *
	 * @access public
	 *
	 * @param string $personUserName 'UserName of person'
	 */
	public function setPersonPassword($personUserName)
	{

	}
	/**
	 *
	 * Gets the values from respective model class and passes the view class by
	 * calling its specific function and passing data.
	 *
	 * @access public
	 */
	public function updateView()
	{

	}
	/**
	 * gets the request from callee.
	 *
	 * @access public
	 */
	public function getRequest($request)
	{
		if ($request['action'] === "showMainMenu") {
			$this->showMainMenuAction($request);
		}
		else if($request['action'] === "editAcountInfo") {
			$this->editAcountInfoAction($request);
		}
		else{
			echo "No action available";
		}
	}
	/**
	 * Displays Menu Depending Upon the Type of user.
	 *
	 * @access private
	 */
	private function showMainMenuAction($request)
	{
		$viewObject = new View();
		$personType = PersonModel::getpersonType();
		$response=null;
		if ($personType === "Salesperson") {
			$request['View'] = "salesPersonMainMenu.php";
			$response = $viewObject->render($request['View'],
			$request['controller']);
			$this->showResponse($response);
			$this->getSalesmanSelectionAction();

		}
		else if ($personType === "Admin") {
			$request['View'] = "adminMainMenu.php";
			$response = $viewObject->render($request['View'],
			$request['controller']);
			$this->showResponse($response);
			$this->getAdminSelection();
		}

	}
	/**
	 * Displays the response of the view script.
	 *
	 * @access public
	 */
	public function showResponse($response)
	{
		echo $response;
	}
	/**
	 * gets Admin Selection from Menu and calls the respective controller
	 *
	 * @access public
	 */
	public function getAdminSelection()
	{
		echo " >> Please Enter Your Choice : ";
		$choice=$this->IOAdapterObject->getInput();
		if(intval($choice)==intval(1))
		{
			echo "1 selected";
		}
		else if(intval($choice)==intval(2))
		{
			echo "2 selected";
			$fc=FrontController::getInstance();
			$request['controller']='Person';
			$request['action']='editAcountInfo';
			$fc->direct($request);

		}
		else if(intval($choice)==intval(3))
		{
			echo "3 selected";
		}
		else if(intval($choice)==intval(4))
		{
			echo "4 selected";
		}
	}
	/**
	 * gets Salesman Selection from Menu and calls the respective controller
	 *
	 * @access public
	 */
	public function getSalesmanSelectionAction()
	{
		$io=IOAdapter::getInstance();
		$io->makeOutput('Enter your choice : ');
		$choice=$this->IOAdapterObject->getInput();
		if(intval($choice)==intval(1))
		{
			echo "1 selected";
		}
		else if(intval($choice)==intval(2))
		{
			echo "2 selected";
			$fc=FrontController::getInstance();
			$request['controller']='Person';
			$request['action']='editAcountInfo';
			$fc->direct($request);

		}
		else if(intval($choice)==intval(3))
		{
			echo "3 selected";
		}
	}

	public function editAcountInfoAction(){
		$dba=DB_Adapter::getInstance();
		$rg=Registry::getInstance();
		$io=IOAdapter::getInstance();
		$v = new View();
		$io->makeOutput($v->render("editAcountInfo.php","Person"));
		$io->makeOutput("\n >> Please Enter your new password : ");
		$pass1= $io->getInput();
		$io->makeOutput("\n >> Please Re-enter your new password : ");
		$pass2= $io->getInput();
		if($pass1===$pass2){
				
			$this->personModel->updatePassword($pass1);
				
			$io->makeOutput("\n Password Updated");
		}else{
			$io->makeOutput("\n Password Doesn't match");
		}
		$request['controller']='Person';
		$request['action']='showMainMenu';

		$fc = FrontController::getInstance();
		$fc->direct($request);

	}

}