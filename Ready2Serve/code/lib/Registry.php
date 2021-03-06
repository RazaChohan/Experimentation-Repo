<?php
/*
 * This file contains Registry class
 * 
 * This file contains the implementions of Registry class which needs to store
 * the data temporarily while navigating from one window to another.
 * 
 * @package Read2Serve
 * @version 1.0
 */

/*
 * Stores data temporarily
 * 
 * This is singleton class to store values whenever required with the help of
 * magic getter and setter
 * 
 * @package Read2Serve
 * @author Tayyab Hussain <tayyab.hussain@coeus-solutions.de>
 * @version 1.0
 */
class Registry
{
    
    /*
     * @var Registry single instance of Registry class
     */
    private static $instance;
    /*
     * @var array associative array to store key value paris
     */
    private $data=array();
    /*
     * instantiates the Registry class
     * 
     * the constructor of Registry class is private because Registry is
     * singleton class and not to be instanstiate from any other class
     */
    private function __construct()
    {
        
    }
    /*
     * sets value to a variable
     * 
     * this magic setter recieves two parameters and store in data
     * associative array by value against a key
     * 
     * @param Object $key      associative key of $value
     * @param Object $value    value to be saved against $key
     */
    public function __set($key, $value)
    {
        $this->data[$key] = $value;
    }
    /*
     * gets value of a variable
     * 
     * this magic getter retrieves the value against property against $key
     * from associative array $data
     * 
     * @param  Object $key    property name from which which we want to retrieve
     *                        value
     * @return Object $value  value against the $key
     */
    public function __get($key)
    {
        return $this->data[$key];
    }
    /*
     * returns the object of Registry class
     * 
     * this static checks the if the instance of Registry class is NULL then
     * return the new object and if not returns the already created object
     *
     * @return Registry instance object of Registry class
     */
    public static function getInstance()
    {
        if (self::$instance == NULL) {
            self::$instance=new Registry();
            return self::$instance;
        }
        return self::$instance;
    }
}
