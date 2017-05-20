<?php 
	namespace App\Http\Controllers;

	use App\model\Article;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;

	/**
	* Article Controller
	*/
	class ArticleController extends Controller
	{
		public function index(){
			$article = Article::all();
			
			return response()->json($article);
		}

		public function getArticle($id) {
			$article = Article::find($id);
			
			return response()->json($article);
		}
		
		public function saveArticle(Request $request) {


			$article = Article::create($request->all());
			
			return "Data save successfully ";
		}

		public function deleteArticle($id){
			$article = Article::find($id);
			$article->delete();

			return "Delete data successfully";
		}

		public function updateArticle(Request $request, $id){
			$article = Article::find($id);
			$article->title = $request->input('title');
			$article->content = $request->input('content');

			$article->save();

			return "Data update successfully !";
		}
		
	}