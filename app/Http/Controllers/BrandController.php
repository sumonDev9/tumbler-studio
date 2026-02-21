namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    public function index() {
        $brands = Brand::latest()->get();
        return view('admin.brand.index', compact('brands'));
    }

    public function store(Request $request) {
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:5120',
        ]);

        $path = $request->file('logo')->store('brands', 'public');
        Brand::create(['logo' => $path]);

        return response()->json(['success' => 'Brand logo added successfully!']);
    }

    public function edit(Brand $brand) {
        return response()->json($brand);
    }

    public function update(Request $request, Brand $brand) {
        $request->validate([
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:5120',
        ]);

        if ($request->hasFile('logo')) {
            if ($brand->logo) Storage::disk('public')->delete($brand->logo);
            $brand->logo = $request->file('logo')->store('brands', 'public');
            $brand->save();
        }

        return response()->json(['success' => 'Brand logo updated successfully!']);
    }

    public function destroy(Brand $brand) {
        if ($brand->logo) Storage::disk('public')->delete($brand->logo);
        $brand->delete();
        return response()->json(['success' => 'Brand removed successfully!']);
    }
}