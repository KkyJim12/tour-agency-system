@extends('layouts.master')
@section('title')
Royaltour | วิธีการชำระเงิน
@endsection
@section('meta')
Royaltour | วิธีการชำระเงิน
@endsection
@section('content')
<div class="payment">
  <div class="banner">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
          <div class="titleBanner">
            <h1>Royal Tour And Travel</h1>
            <p>- การชำระเงิน -</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-4">
    <div class="row">
      <div class="col-12">
        <h3 class="title"><img src='/assets/img/payment/icn-payment.png' class='icon-title'>วิธีการชำระเงิน</h3>
        <div class="company">
          <div class="row">
            <div class="col-md-6 mb-3">
              <section class='tempCompany'>
                <h1>ชื่อบัญชีบริษัท</h1>
                <p>บริษัท รอยัลทัวร์ แอนด์ เทรดดิ้ง จำกัด</p>
                <p>บริษัท รอยัลทัวร์ แอนด์ ทราเวล จำกัด</p>
              </section>
            </div>
            <div class="col-md-6 mb-3">
              <section class='tempStaff'>
                <h1>กรรมการผู้มีอำนาจ</h1>
                <p>นางสาวสุรีย์พร ออสุวรรณ</p>
                <p>นางสาววรรษมน นังคลา</p>
              </section>
            </div>
          </div>
        </div>
        <section class='my-3 titleContent'>
          <div class="row justify-content-center my-4">
            <div class="col-sm-6 col-md-4 col-lg-3">
              <figure class='text-center'>
                <img src='/assets/img/payment/content1.jpg'>
              </figure>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <figure class='text-center'>
                <img src='/assets/img/payment/content2.jpg'>
              </figure class='text-center'>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <figure class='text-center'>
                <img src='/assets/img/payment/content3.jpg'>
              </figure>
            </div>
          </div>
          <h1>ขั้นตอนการชำระเงิน</h1>
          <ol class='pl-3'>
            <li>แจ้งเจ้าหน้าที่ฝ่ายขาย เพื่อทำการจองที่นั่ง และออกใบแจ้งยอดที่การชำระเงิน</li>
            <li>ชำระเงินมัดจำ เพื่อสำรองที่นั่งและชำระส่วนที่เหลือก่อนการเดินทางตามเงื่อนไข</li>
            <li>ส่งหลักฐานการชำระเงิน พร้อมแจ้งเจ้าหน้าที่ฝ่ายขายทันที (โปรดเก็บเอกสารการโอนเงิน และใบเสร็จรับเงินของบริษัทฯ เพื่อใช้เป็นหลักฐาน)</li>
          </ol>
          <h1 class='mt-3'>ข้อควรระวัง</h1>
          <ul class='pl-3'>
            <li>ก่อนการชำระเงินเจ้าหน้าที่ฝ่ายขายจะส่งเอกสารใบอนุญาตนำเที่ยว หนังสือรับรองบริษัทฯ เพื่อทำการตรวจสอบก่อนการชำระเงิน</li>
            <li>กรุณาติดต่อเจ้าหน้าที่ตามเบอร์โทรหน้าเว็บไซต์เท่านั้น! ระวังผู้แอบอ้าง หรือสามารถสอบถามข้อมูลพนักงานขายได้ที่เบอร์กลาง 02-595-0279 ก่อนการชำระเงิน</li>
            <li>ทางบริษัทฯ ไม่มีการออกไปเรียกเก็บเงิน หรือรับรูดบัตรนอกสถานที่ โดยต้องเข้ามาชำระเงินที่สำนักงาน สาขาบางใหญ่ และ สาขาสุขุมวิท 13 เท่านั้น!</li>
          </ul>
          <p class='colorRed'>หากทำการชำระโดยวิธีโอนเข้าบัญชีบริษัทฯ กรุณาเก็บหลักฐานการโอนไว้จนกว่าจะถึงวันเดินทาง</p>
          <h1 class='mt-3'>ตรวจสอบการชำระเงิน</h1>
          <p class='mb-0'>กรุณาโอนเข้าบัญชี หรือเช็คสั่งจ่ายในนามของบริษัทฯ หรือในนามของกรรมการของบริษัทเท่านั้น หากโอนเข้าบัญชีอื่นๆ ที่ไม่เกี่ยวข้อง ทางเราจะไม่รับผิดชอบใดๆทั้งสิ้น</p>
          <h1 class='mt-3'>เงื่อนไขการรับชำระด้วยบัตร</h1>
          <ul class='pl-3'>
            <li>การรูดบัตรเครดิตทุกธนาคาร เจ้าของบัตรต้องเสีย 3% ของยอดที่ชำระ การสะสมคะแนนของบัตรต้องตรวจสอบเงื่อนไขของธนาคาร</li>
            <li>ลูกค้าสามารถเลือกผ่อนชำระเป็นรายเดือนได้ โดยเสียค่าธรรมเนียม 1.5% และอัตราดอกเบี้ย 0.89% ต่อเดือน (เฉพาะ KTC)</li>
            <li>การผ่อนชำระ 0% จะมีให้เลือกบางรายการที่นำมาจัดโปรโมชั่นเท่านั้น กรุณาติดต่อสอบถามฝ่ายขาย</li>
            <li>รับเฉพาะบัตรที่มีโลโก้ VISA และ MasterCard ที่เปิดบริการจากธนาคารในประเทศไทยเท่านั้น</li>
          </ul>
        </section>

      </div>
    </div>
  </div>
  <div class="bgBank py-4">
    <div class="container">
      <div class="tempBank">
        <div class="row">
          <div class="col-12">
            <h3 class="title"><img src='/assets/img/payment/icn-payment.png' class='icon-title'>ช่องทางการชำระเงิน</h3>
          </div>
        </div>
        <div class="row bank">
          <div class="col-lg-6 mb-3">
            <h1>ชื่อบัญชี <span>นางสาวสุรีย์พร ออสุวรรณ</span></h1>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col" class='text-center'>ธนาคาร</th>
                  <th scope="col" class='text-center'>เลขบัญชี</th>
                  <th scope="col" class='text-center'>สาขา</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><img src='/assets/img/payment/kasi.png' class='icon-title'> กสิกรไทย</td>
                  <td class='text-center'>572-2-444-711</td>
                  <td class='text-center'>บิ๊กซีบางใหญ่</td>
                </tr>
                <tr>
                  <td><img src='/assets/img/payment/bangkok.png' class='icon-title'> กรุงเทพ</td>
                  <td class='text-center'>221-4-196-418</td>
                  <td class='text-center'>ตลาดบางใหญ่</td>
                </tr>
                <tr>
                  <td><img src='/assets/img/payment/panit.png' class='icon-title'> ไทยพาณิชย์</td>
                  <td class='text-center'>405-5-091-741</td>
                  <td class='text-center'>ตลาดบางใหญ่</td>
                </tr>
                <tr>
                  <td><img src='/assets/img/payment/kungthai.png' class='icon-title'> กรุงไทย</td>
                  <td class='text-center'>758-0-334-364</td>
                  <td class='text-center'>ตลาดบางใหญ่</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-lg-6 mb-3">
            <h1>ชื่อบัญชี <span>วรรษมน นังคลา</span></h1>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col" class='text-center'>ธนาคาร</th>
                  <th scope="col" class='text-center'>เลขบัญชี</th>
                  <th scope="col" class='text-center'>สาขา</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><img src='/assets/img/payment/kasi.png' class='icon-title'> กสิกรไทย</td>
                  <td class='text-center'>572-2-444-711</td>
                  <td class='text-center'>บิ๊กซีบางใหญ่</td>
                </tr>
                <tr>
                  <td><img src='/assets/img/payment/bangkok.png' class='icon-title'> กรุงเทพ</td>
                  <td class='text-center'>221-4-196-418</td>
                  <td class='text-center'>ตลาดบางใหญ่</td>
                </tr>
                <tr>
                  <td><img src='/assets/img/payment/panit.png' class='icon-title'> ไทยพาณิชย์</td>
                  <td class='text-center'>405-5-091-741</td>
                  <td class='text-center'>ตลาดบางใหญ่</td>
                </tr>
                <tr>
                  <td><img src='/assets/img/payment/kungthai.png' class='icon-title'> กรุงไทย</td>
                  <td class='text-center'>758-0-334-364</td>
                  <td class='text-center'>ตลาดบางใหญ่</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

@endsection
