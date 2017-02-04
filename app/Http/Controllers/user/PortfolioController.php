<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Published;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
{
    //
	/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addPublished(Request $request)
    {
        //
/*     $this->validate($request, [
	    'ArticleName' => 'unique:publisheds',

		]);*/
		$objs = new Published();
		$objs->type_portfolio = $request['TypePortfolio'];
		$objs->author_combined = $request['AuthorCombined'];
		$objs->article_name = $request['ArticleName'];
		$objs->conference_journal = $request['ConferenceJournal'];
		$objs->year_published = $request['YearPublished'];
		$objs->vol_published = $request['VolPublished'];
		$objs->publication_duties = $request['PublicationDuties'];
		$objs->published_link = $request['PublishedLink'];
		$objs->user_id = $request['userid'];
		$objs->save();

		return redirect('Profile');

    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updatePublished(Request $request)
    {
        //
/*     $this->validate($request, [
	    'ArticleName' => 'unique:publisheds',
	    'UserId' => 'unique:publisheds',
		]);*/
		$objs = Published::find($request['pubid']);
		$objs->type_portfolio = $request['typepub'];
		$objs->author_combined = $request['author'];
		$objs->article_name = $request['article'];
		$objs->conference_journal = $request['journal'];
		$objs->year_published = $request['yearpub'];
		$objs->vol_published = $request['volpub'];
		$objs->publication_duties = $request['pubpage'];
		$objs->published_link = $request['plink'];
		$objs->update();

		return redirect('Profile');

    }


    public function deletePublished($id)
    {
        //
/*     $this->validate($request, [
	    'ArticleName' => 'unique:publisheds',
	    'UserId' => 'unique:publisheds',
		]);*/
		$objs = Published::find($id);
        $objs->delete();


		return redirect('Profile');

    }



}
