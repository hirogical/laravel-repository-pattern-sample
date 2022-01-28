<?php

namespace App\Repositories;

use App\Http\Requests;

interface BookRepositoryInterface
{
    public function index();

    public function create();

    public function store();

    public function show();

    public function edit();

    public function update();

    public function destroy();
}
