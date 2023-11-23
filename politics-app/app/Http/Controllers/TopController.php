<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Consts\PrefectureConst;
use Hamcrest\Arrays\IsArray;

class TopController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $user = new User();
    $all = User::all();
    $allCount = $all->count();

    for ($i=1; $i <= PrefectureConst::OPTIONS['support']; $i++) {
      $maxManCount    = 0;
      $maxWomanCount  = 0;

      $supportCount = $all->where('support', $i)->count();

      if ($supportCount) {
        // 政党支持率
        $supportPercent[$i] = $user->calcPercent($allCount, $supportCount);
      } else {
        $supportPercent[$i] = 0;
      }
    }

    // 男女別支持政党トップ
    $allMan = $all->where('sex', 1)->toArray();
    $allWoman = $all->where('sex', 2)->toArray();

    $sortManSupport = $user->countSexSupport($allMan);
    $sortWomanSupport = $user->countSexSupport($allWoman);

    return view('top.index', compact('supportPercent', 'sortManSupport', 'sortWomanSupport'));
  }
}
