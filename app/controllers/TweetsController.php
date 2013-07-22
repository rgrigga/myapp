<?php
// http://subtlepatterns.com/
// Unit Testing in mind.  There are pros and cons to Unit Testing.  I began developing 
// without it, so we'll see...
// better for larger projects?

// Main benefits are that while time is invested into tests up front,
// they .  Most importantly, it ensures consistency in code quality.

//My goals are to gain a deep understanging of 

class TweetsController extends BaseController {

    /**
     * Tweet Repository
     *
     * @var Tweet
     */
    protected $tweet;

    public function __construct(Tweet $tweet)
    {
        $this->tweet = $tweet;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tweets = $this->tweet->all();

        return View::make('tweets.index', compact('tweets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('tweets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        $validation = Validator::make($input, Tweet::$rules);

        if ($validation->passes())
        {
            $this->tweet->create($input);

            return Redirect::route('tweets.index');
        }

        return Redirect::route('tweets.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $tweet = $this->tweet->findOrFail($id);

        return View::make('tweets.show', compact('tweet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $tweet = $this->tweet->find($id);

        if (is_null($tweet))
        {
            return Redirect::route('tweets.index');
        }

        return View::make('tweets.edit', compact('tweet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $input = array_except(Input::all(), '_method');
        $validation = Validator::make($input, Tweet::$rules);

        if ($validation->passes())
        {
            $tweet = $this->tweet->find($id);
            $tweet->update($input);

            return Redirect::route('tweets.show', $id);
        }

        return Redirect::route('tweets.edit', $id)
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->tweet->find($id)->delete();

        return Redirect::route('tweets.index');
    }

}