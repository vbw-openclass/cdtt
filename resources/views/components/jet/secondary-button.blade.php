<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-50 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 dark:text-white active:bg-gray-50 dark:bg-gray-800 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
