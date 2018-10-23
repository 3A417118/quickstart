@include('common.errors')
Route::post('/task', function (Request $request) {
    // 驗證輸入
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    // 建立該任務...
	// 建立該任務...
    $task = new Task;
    $task->name = $request->name;
    $task->save();
    return redirect('/');

});
