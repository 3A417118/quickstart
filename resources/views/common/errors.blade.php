@include('common.errors')
Route::post('/task', function (Request $request) {
    // ���ҿ�J
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    // �إ߸ӥ���...
	// �إ߸ӥ���...
    $task = new Task;
    $task->name = $request->name;
    $task->save();
    return redirect('/');

});
