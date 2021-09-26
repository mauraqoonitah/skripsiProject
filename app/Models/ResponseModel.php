<?php

namespace App\Models;

use CodeIgniter\Model;

class ResponseModel extends Model
{
    protected $table      = 'response';
    protected $userTimestamps = true;
    protected $allowedFields = ['questionID', 'kodeInstrumen', 'instrumenID', 'slug', 'jawaban', 'responden', 'userID'];

    //kalo ada parameternya, cari yg pake where tadi
    // kalo gaada, ambil ssemua data kategori

    public function getResponse($id = false)
    {
        if ($id == false) {
            return $this
                ->orderBy('id', 'desc')
                ->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
    public function getResponseByInstrumen()
    {
        return $this
            ->join('instrumen', 'instrumen.id = response.instrumenID')
            ->groupBy('kodeCategory')
            ->findAll();
    }
    public function getResponseButir($id)
    {
        return $this
            ->join('questions', 'questions.instrumenID = response.instrumenID')
            ->where('response.instrumenID', $id)
            ->groupBy('questions.id')
            ->findAll();
    }
    public function getResponseJawaban($id)
    {
        return $this
            ->join('questions', 'questions.id = response.questionID')
            ->where('response.instrumenID', $id)
            ->groupBy('response.id')
            ->findAll();
    }
    public function getResponseJawabanLagi($id)
    {
        return $this
            ->join('questions', 'questions.id = response.questionID')
            ->where('response.instrumenID', $id)
            ->groupBy('response.questionID')
            ->findAll();
    }
    public function getJumlahRespondenIns($instrumenID)
    {
        return $this
            ->select('userID')
            ->where('instrumenID', $instrumenID)
            ->groupBy('userID')
            ->countAllResults();
        // ->findAll();
    }

    // ---------------- HASIL SURVEI - RESPONDEN --------------------------
    public function getResponseByInstrumenID($id)
    {
        return $this
            ->join('questions', 'questions.instrumenID = response.instrumenID')
            ->where('response.userID', $id)
            ->groupBy('response.instrumenID')
            ->findAll();
    }

    public function getRespondenData($id)
    {
        return $this
            ->join('responden', 'responden.userID = response.userID')
            ->where('response.userID', $id)
            ->groupBy('response.userID')
            ->findAll();
    }

    public function getButirByInstrumenID($id)
    {
        return $this
            ->join('questions', 'questions.instrumenID = response.instrumenID')
            ->where('response.instrumenID', $id)
            ->findAll();
    }


    public function getResponseByQuestID($id)
    {
        return $this
            ->join('questions', 'questions.instrumenID = response.instrumenID')
            ->where('response.userID', $id)
            ->groupBy('questions.id')
            ->findAll();
    }
}
