<div class="bg-white shadow-md">
    <nav class="container mx-auto px-4 py-3 flex justify-between items-center">
        <div class="text-xl font-bold text-gray-800">
            Welcome {{ Auth::user()->name }}
        </div>
        <ul class="flex space-x-8">
            <li>
                <a href="{{ route('admin.Home') }}" class="text-gray-600 hover:text-blue-600 transition duration-200">Dashboard</a>
            </li>
            <li>
                <a href="/admin/users" class="text-gray-600 hover:text-blue-600 transition duration-200">Users</a>
            </li>
            <li>
                <a href="/admin/Restaurant" class="text-gray-600 hover:text-blue-600 transition duration-200">Restaurant</a>
            </li>
            <li>
                <a href="/admin/Settings" class="text-gray-600 hover:text-blue-600 transition duration-200">Settings</a>
            </li>
            <li>
                <form action="/logout">
                    @csrf
                    <button type="submit" class="text-gray-600 hover:text-blue-600 transition duration-200">Logout</button>
                </form>
            </li>
        </ul>
    </nav>
</div>