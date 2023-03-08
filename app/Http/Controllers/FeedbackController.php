<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedback::orderBy('id' , 'desc')->get();
        return view('front.feedback.index', compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product' => 'required',
            'rating' => 'required',
            'subject' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        $user_id = auth()->user()->id;
        $model = new Feedback();
        $model->user_id = $user_id;
        $model->product_type = $request->product;
        $model->rating = $request->rating;
        $model->subject = $request->subject;
        $model->description = $request->description;

        if($request->hasFile('image')){
            $path  = $request->file('image')->store('/images/feedback' , 'public');
            $model->image = $path;
        }

        if($model->save()){
            return redirect()->back();
        }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feedback = Feedback::find($id);
    if($feedback->delete($id)){
        return redirect()->route('front.feedback.index')->with('success' , 'Status updated successfully');
    }else{
        return redirect()->route('front.feedback.index')->with('error', 'Something went wrong!');
    }
    }

    public function status($id , $status){
        $feedback = Feedback::find($id);
        $feedback->status = $status;
        if($feedback->update()){
            return redirect()->route('front.feedback.index')->with('success' , 'Status updated successfully');
        }else{
            return redirect()->route('front.feedback.index')->with('error', 'Something went wrong!');
        }
    }
}
