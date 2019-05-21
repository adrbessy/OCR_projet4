<?php

namespace app\Table;

class Post{

	public function __get($key){
		$method = 'get' . ucfirst($key);
		$this->$key = $this->$method();
		return $this->$key;
	}

	public static function getPagination($nb_billets){
		$html = '<nav aria-label="Page navigation example">';
		$html .= '<ul class="pagination">';
		for ($i=1 ; $i<$nb_billets ; $i++)
        {
            if(isset($_GET['page'])){
                $current = $_GET['page'];
            }else{
                $current = 1;
            }
            if($current == $i){
                $html .= '<li class="active page-item" ><a class="page-link" href="index.php?action=posts.listPosts&page=' . $i . '"> ' . $i . '</a></li>';
            }else{
                $html .= '<li class="page-item"><a class="page-link" href="index.php?action=posts.listPosts&page=' . $i . '"> ' . $i . '</a></li> ';
            }  
        }
        $html .= '</ul>
            </nav>';
        return $html;
	}

	public function getUrl(){
		return 'index.php?action=posts.post&id=' . $this->id;
	}

	public function getExtract(){
		$html = '<div>' . substr($this->content,0, 250) . ' ...</br>';
		$html .= '<a href = "' . $this->getUrl() . '">Voir la suite</a></div>';
		return $html;
	}

}
