<?php

class DOArticlesCategoryHolderPage extends Page {

	static $singular_name = "Article Categories Holder";
	static $icon = "DOArticles/images/files.png";
	static $description = 'List of categories for adding articles';

	static $allowed_children = array("DOArticlesCategoryPage"); // set to string "none" or array of classname(s)
	static $default_child = "DOArticlesCategoryPage"; //one classname
	static $default_parent = null; // NOTE: has to be a URL segment NOT a class name
	static $can_be_root = true; //
	static $hide_ancestor = null; //dont show ancestry class

	public function canCreate($member = null) {
		return DataList::create("DOArticlesCategoryHolderPage")->count() < 1;
	}

}

class DOArticlesCategoryHolderPage_Controller extends Page_Controller {

	public function PaginatedArticles() {
		//$pages = DataList::create('DOArticle')->filter(array('ArticleHolderID' => $this->ID))->sort('Date DESC');
		$pages = DOArticle::get()->sort('Date DESC');
		$list = new PaginatedList($pages, $this->request);
		$list->setPageLength(5);
		return $list;
	}
}