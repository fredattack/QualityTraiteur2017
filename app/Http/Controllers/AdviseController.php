<?php 

namespace App\Http\Controllers;

//use App\Http\Requests\Request;

use Illuminate\Http\Request;

class AdviseController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

      $adviseList =\App\Advise::all();
         $noteMoyenne=\App\Advise::avg('note');
         $noteMoyenne=number_format((float)$noteMoyenne, 1, ',', '');
      return view('front.guestBook', compact(['adviseList','noteMoyenne']));

  }

    public function indexForHomeSlide()
    {

        $arr['lesAvis']=\App\Advise::take(3)-> where('note', '>', 3)->inRandomOrder()->get();

        return response($arr);

    }
  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
      $this->validate($request, [
          'note'=>'bail|required|min:0.5',
          'userName' => 'bail|required',
          'userEmail' => 'bail|required',
          'localite' => 'bail|required',
          'message' => 'bail|required',
      ]);
//      dd($request);
      $input = $request->all();

      \App\Advise::create($input);
      redirect('guestBook');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>