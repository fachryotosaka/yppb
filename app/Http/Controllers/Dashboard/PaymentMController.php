<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\PaymentM;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;
use RealRashid\SweetAlert\Facades\Alert;

class PaymentMController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){

        $payments = PaymentM::orderBy("created_at","desc")->paginate(10);
        $type_menu = 'table-payment';
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view("pages.dashboard.payment.index",compact("payments","type_menu"));
    }

    public function create() {
        $payments = PaymentM::all();
        $type_menu = 'create-payment';

        return view ('pages.dashboard.payment.create', compact('payments','type_menu'));
    }

        public function store(Request $request){
            $payments = PaymentM::create($request->all());

            Alert::toast('Success Create Data','success');
            return redirect('dashboard/payment/table')->with('message', 'Success Created !');
        }

    public function edit(Request $request, $slug) {
        $payments = PaymentM::where('slug', $slug)->firstOrFail();
        $type_menu = 'update-payment';

        return view ('pages.dashboard.payment.edit', compact('payments','type_menu'));
    }

    public function update(Request $request, $id){
        $payments = PaymentM::findOrFail($id);
        $payments->update($request->all());

        Alert::toast('Success Update Data','success');

        return redirect('dashboard/payment/table')->with('message', 'Success Created !');
    }

    public function destroy($id)
    {
        $payments = PaymentM::findOrFail($id);
        $payments->delete();

        Alert::toast('Success Move Data To Trash','success');
        return redirect('dashboard/payment/table')->with('message', 'Success Delete Data !');
    }

    public function trash()
    {
        $payments = PaymentM::onlyTrashed()->get();
        $type_menu = 'trash-table-payment';
        return view('pages.dashboard.payment.trash', compact('payments', 'type_menu'));
    }

    public function restore($id)
    {
        $payments = PaymentM::onlyTrashed()->findOrFail($id);
        $payments->restore();

        Alert::toast('Success Restore Data','success');
        return redirect('dashboard/payment/table')->with('message', 'Success Delete Data !');

    }

    public function force($id)
    {
        $payments = PaymentM::onlyTrashed()->findOrFail($id);
        Schema::disableForeignKeyConstraints();
        $payments->forceDelete();
        Schema::enableForeignKeyConstraints();

        Alert::toast('Success Force Data','success');
        return redirect('dashboard/payment/table')->with('message', 'Success Delete Data !');

    }
}
