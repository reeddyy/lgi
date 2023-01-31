<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySurveyRequest;
use App\Http\Requests\StoreSurveyRequest;
use App\Http\Requests\UpdateSurveyRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SurveyController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('survey_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.surveys.index');
    }

    public function create()
    {
        abort_if(Gate::denies('survey_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.surveys.create');
    }

    public function store(StoreSurveyRequest $request)
    {
        $survey = Survey::create($request->all());

        return redirect()->route('admin.surveys.index');
    }

    public function edit(Survey $survey)
    {
        abort_if(Gate::denies('survey_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.surveys.edit', compact('survey'));
    }

    public function update(UpdateSurveyRequest $request, Survey $survey)
    {
        $survey->update($request->all());

        return redirect()->route('admin.surveys.index');
    }

    public function show(Survey $survey)
    {
        abort_if(Gate::denies('survey_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.surveys.show', compact('survey'));
    }

    public function destroy(Survey $survey)
    {
        abort_if(Gate::denies('survey_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $survey->delete();

        return back();
    }

    public function massDestroy(MassDestroySurveyRequest $request)
    {
        Survey::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
