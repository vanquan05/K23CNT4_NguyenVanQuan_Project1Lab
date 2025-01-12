<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nvq_thanh_toan', function (Blueprint $table) {
            $table->id();
            $table->string('nvqMaGiaoDich', 50)->unique(); 
            $table->unsignedBigInteger('nvqMaKhachHang'); 
            $table->unsignedBigInteger('nvqMaHoaDon'); 
            $table->decimal('nvqTongTien', 15, 2);
            $table->string('nvqPTTT', 50); // Phương thức thanh toán
            $table->dateTime('nvqNgayThanhToan')->nullable();
            $table->tinyInteger('nvqTrangThai');
            $table->timestamps();
            $table->foreign('nvqMaKhachHang')->references('id')->on('nvq_khach_hang')->onDelete('cascade');
            $table->foreign('nvqMaHoaDon')->references('id')->on('nvq_hoa_don')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvq_thanh_toan');
    }
};