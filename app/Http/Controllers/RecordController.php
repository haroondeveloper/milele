<?php
namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class RecordController extends Controller
{
    public function index()
    {
        return view('records.filter');

    }

    public function filter(Request $request)
    {
        $supplier = $request->input('supplier');
        $wholesaler = $request->input('wholesaler');
        $steering_type = $request->input('steering_type');

        $records = Record::where('supplier', $supplier)
            ->where('wholesaler', $wholesaler)
            ->where('steering_type', $steering_type)
            ->get();

        return view('records.next_page', get_defined_vars());
    }


    public function store(Request $request)
    {
        $records = Record::where(['supplier' => $request->supplier, 'wholesaler' => $request->wholesaler, 'steering_type' => $request->steering_type])->get();

        return view('records.index', compact('records'));
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $field = $request->input('field');
        $value = $request->input('value');

        $record = Record::find($id);
        $record->setAttribute($field, $value);
        $record->save();

        return response()->json($record);
    }

    public function add(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'supplier' => 'required',
                'wholesaler' => 'required',
                'steering_type' => 'required',
                'car_model' => 'required',
                'car_sfx' => 'required',
                'car_variant' => 'required',
                'color' => 'required',
                'month' => 'required'
            ]);

            $record = new Record;
            $record->supplier = $validatedData['supplier'];
            $record->steering_type = $validatedData['steering_type'];
            $record->wholesaler = $validatedData['wholesaler'];
            $record->car_model = $validatedData['car_model'];
            $record->car_sfx = $validatedData['car_sfx'];
            $record->car_variant = $validatedData['car_variant'];
            $record->color = $validatedData['color'];
            $record->month = $validatedData['month'];
            $record->save();

            return response()->json($record);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation Error',
                'errors' => $e->errors()
            ], 400);
        }
    }


    public function filterData(Request $request)
    {
        $model = $request->input('model');
        $variant = $request->input('variant');
        $sfx = $request->input('sfx');
        $color = $request->input('color');

        $data = DB::table('records')
            ->where('car_model', $model)
            ->where('car_variant', $variant)
            ->where('car_sfx', $sfx)
            ->where('color', $color)
            ->get();

        return response()->json($data);
    }
}

?>
