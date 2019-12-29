<?php

namespace App\Http\Controllers;

use App\City;
use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $title = 'لیست کاربران';
        $subTitle = 'در اینجا می توانید لیست کاربران را مشاهده کنید ';
//        $limit = 10;
//        $text = '';
//        $helper=new PublicFunctionController();
//        $query = User::where('type', '1')->with(['city']);
//
//        $allStates = City::select(['id', 'name_fa'])
//            ->where('parent_id', '!=', '0')
//            ->get();
//
//
//        if (!empty($request->text)) {
//            $text = $request->text;
//            $query = $query->where(function ($query) use ($text) {
//                $query->orwhere('first_name', 'LIKE', '%' . $text . '%')
//                    ->orWhere('last_name', 'LIKE', '%' . $text . '%')
//                    ->orWhere('phone', 'LIKE', '%' . $text . '%');
//            });
//        }
//
//        if (!empty($request->limit)) {
//            $limit = $request->limit;
//        }
//
//        if (!empty($request->city_id)) {
//            $city_id = $request->city_id;
//            $query = $query->where(function ($query) use ($city_id) {
//                $query->orwhere('city_id','=', $city_id);
//            });
//        }
//
//
//
//        if(!empty($request->fromDate)){
//            $fromDate = $helper->getGeorgianDate($request->fromDate);
//            $query = $query->where(function ($query) use ($fromDate) {
//                $query->orWhere('created_at','>=',$fromDate);
//            });
//        }
//
//        if(!empty($request->toDate) && !empty($request->fromDate)){
//            $fromDate = $helper->getGeorgianDate($request->fromDate);
//            $toDate = $helper->getGeorgianDate($request->toDate);
//            $query = $query->where(function ($query) use ($fromDate,$toDate) {
//                $query->whereBetween('created_at',array($fromDate,$toDate));
//            });
//        }
//
//        if ($request->ajax()) {
//            $users = $query->paginate($limit)
//                ->appends(
//                    array(
//                        'text' => !empty($text) ? $text : '',
//                        'city_id' => !empty($city_id) ? $city_id : '',
//                        'fromDate' => !empty($fromDate) ? $fromDate : '',
//                        'toDate' => !empty($toDate) ? $toDate : '',
//                    )
//                );
//            return response()->json(array(
//                'body' => view('backend.Elements.users',
//                    compact('users', 'text', 'title', 'subTitle', 'allStates'))->render()
//            ), JSON_UNESCAPED_UNICODE);
//        }
//        $users = $query->paginate($limit)->appends(array('text' => !empty($text) ? $text : ''));
        return View('backend.users.index', compact('title', 'subTitle'));

    }

    public function store(Request $request)
    {
        $input=$request->all();

        $input['password']=bcrypt($request->password);

        $user=User::create($input);

        $img_icon = Image::make($request->profile);

        $img_icon->resize(300, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save(public_path('img/users/profiles/'.$user->id.'.jpg'),80,'jpg');

        $img_melli = Image::make($request->melli);

        $img_melli->resize(300, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save(public_path('img/users/proof/'.$user->id.'.jpg'),80,'jpg');

        return redirect('/')->with('message','با تشکر');

    }

    public function cities(Request $request)
    {

        $cities=City::where('parent_id',$request->id)->get(['name','id']);

        return response()->json(array(
            'data'=> view('backend.partials.filters.cities' ,compact('cities'))->render(),
            'status' => '1',
        ), JSON_UNESCAPED_UNICODE);

    }
}
