<?php defined('SYSPATH') or die('No direct script access.');

//Extend Controller_Rating from Controller_Template instead of Controller if you want to use skeleton (template)
class Controller_Rating extends Controller_Template {

	const INDEX_PAGE = 'rating';
	//Set the template for your controller as $template = "template", since our template file is template.php in view folder.

	public $template = 'template';

    public function action_index() {
		//$this->request->action(); // This tells you the action requested

        $ratings = ORM::factory('Rating')->find_all(); // loads all rating object from table

        $view = new View('rating/index');
        $view->set("ratings", $ratings); // set "ratings" object to view
      	$this->template->set('content', $view);

        $test_404 = ! TRUE; //actually, I'm trying to explain here : let action know, which template to load

        if($test_404){
        	$this->template = 'error/404';
        	parent::before(); //Required, tested in Kohana 3.3.1, for details look in Tip :1 below Line#30
        }

        //$this->response->body($view);
    }

    /*  Tip :1
     *  //controller is extended Controller_Template, In the controllers before method, you could check the name of the action and change the template based on that
        public function before()
    	{
        	// You can add actions to this array that will then use a different template
        	if (in_array($this->request->action(), array('index', 'new'))) {
                $this->template = 'another_template';
        	}
			parent::before();
    	}
    */
    // loads the new rating form
    public function action_new() {
        $rating = new Model_Rating();

        $view = new View('rating/edit');
        $view->set("rating", $rating);

        $this->template->set('content', $view);
        //$this->response->body($view);
    }

    // edit the rating
    public function action_edit() {
        $rating_id = $this->request->param('id');
        $rating = new Model_Rating($rating_id);

        $view = new View('rating/edit');
        $view->set("rating", $rating);

        $this->template->set('content', $view);
        //$this->response->body($view);
    }

    // delete the rating
    public function action_delete() {
        $rating_id = $this->request->param('id');
        $rating = new Model_Rating($rating_id);

        $rating->delete();
        HTTP::redirect(self::INDEX_PAGE); //Tip :2 [obsolete, v3.2], Line #85
    }

    // save the rating
    public function action_post() {
        $rating_id = $this->request->param('id');
        $rating = new Model_Rating($rating_id);
        $rating->values($_POST); // populate $rating object from $_POST array
        $rating->save(); // saves rating to database

        HTTP::redirect(self::INDEX_PAGE);
    }

} // End Rating

/*  Tip :2 [obsolete, v3.2]
    //Request::redirect is not longer exists. So in order to easily to move from 3.2 to 3.3 I extented Kohana_Request class and added redirect method. Just create Request.php in classes folder and write

    class Request extends Kohana_Request {

     // Kohana Redirect Method
     //  @param string $url

    public function redirect($url) {
        HTTP::redirect($url);
    }

    }

So you will be able to use both Request::redirect and $this->request->redirect
*/
